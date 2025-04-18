<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Maker;
use App\Models\ProductClass;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $makerId = $request->maker_id;
        $categoryId = $request->category_id;
        $productName = $request->product_name;
        $productCode = $request->product_code;
    
        $products = Product::with(['maker', 'category', 'productClasses'])
            ->when($makerId, function ($query) use ($makerId) {
                return $query->where('maker_id', $makerId);
            })
            ->when($categoryId, function ($query) use ($categoryId) {
                return $query->where('category_id', $categoryId);
            })
            ->when($productName, function ($query) use ($productName) {
                return $query->where('product_name', 'LIKE', "%$productName%");
            })
            ->when($productCode, function ($query) use ($productCode) {
                return $query->where('product_code', 'LIKE', "%$productCode%")
                    ->orWhereHas('productClasses', function ($q) use ($productCode) {
                        $q->where('product_code', 'LIKE', "%$productCode%");
                    });
            })
            ->paginate(4);
    
        $makers = Maker::all(); 
        $categories = Category::all(); 
    
        return view('product.index', compact('products', 'makers', 'categories', 'makerId', 'categoryId', 'productName', 'productCode'));
    }
    
        public function create()
        {
            $makers = Maker::exists() ? Maker::all() : collect();
            $categories = Category::exists() ? Category::all() : collect();
            
            return view('product.create', compact('makers', 'categories'));
        }
    
        public function store(Request $request)
        {
            // 🛠️ Kiểm tra dữ liệu đầu vào
            $request->validate([
                'product_code'  => 'required|unique:product,product_code',
                'product_name'  => 'required|string|max:255',
                'maker_id'      => 'required|exists:maker,id',
                'category_id'   => 'required|exists:category,id',
                'note'          => 'nullable|string',
                 'product_image' => 'nullable|array|min:1',
                'product_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'color'         => 'nullable|array',
                'size'          => 'nullable|array',
                'color_code'    => 'nullable|array',
            ]);
        
            // return $request->color;
    
            DB::beginTransaction();
    
            try {
                // 🔹 Tạo sản phẩm trong bảng `products`
                $product = new Product();
                $product->product_code = $request->product_code;
                $product->product_name = $request->product_name;
                $product->maker_id = $request->maker_id;
                $product->category_id = $request->category_id;
                $product->note = $request->note;
                $product->create_staff = Auth::guard('admin')->id();
                $product->save();
                $colors = $request->input('color', []);
                $sizes = $request->input('size', []);
                $color_codes = $request->input('color_code', []);
        
               
               // Chuẩn hóa dữ liệu để tránh lỗi số lượng phần tử không đồng nhất
    
    $colors = array_values(array_filter($colors, fn($c) => !empty($c))); 
    $color_codes = array_values(array_filter($color_codes, fn($c) => !empty($c))); 
    $sizes = array_values(array_filter($sizes, fn($s) => !empty($s))); 
    
    // Xác định số lượng sản phẩm cần tạo
    $totalColors = count($colors);
    $totalColorCodes = count($color_codes);
    $totalSizes = count($sizes);
    
    // Lấy số phần tử nhỏ nhất để tránh lỗi lặp dư
    $minCount = min($totalColors, $totalColorCodes, $totalSizes);
    
    // Đảm bảo danh sách có cùng số phần tử
    $colors = array_slice($colors, 0, $minCount);
    $color_codes = array_slice($color_codes, 0, $minCount);
    $sizes = array_slice($sizes, 0, $minCount);
    
    $uniqueCombinations = [];
    $codeCounter = 1;
    
    // Chỉ duyệt theo số màu có trong danh sách
    for ($i = 0; $i < $minCount; $i++) {
        $colorValue = $colors[$i] ?? '-'; 
        $colorCodeValue = $color_codes[$i] ?? '-';
        $sizeValue = $sizes[$i] ?? '-';
    
        // Kiểm tra dữ liệu hợp lệ trước khi lưu
        if ($colorValue === '-' || $colorCodeValue === '-' || $sizeValue === '-') {
            continue; // Bỏ qua nếu có dữ liệu thiếu
        }
    
        // Tạo khóa duy nhất
        $combinationKey = "$colorValue-$sizeValue-$colorCodeValue";
    
        // Kiểm tra trùng lặp
        if (!isset($uniqueCombinations[$combinationKey])) {
            $uniqueCombinations[$combinationKey] = true;
            $pl = new ProductClass();
            $pl->product_id = $product->id;
            $pl->product_code = $request->product_code . '-' . str_pad($codeCounter, 3, '0', STR_PAD_LEFT);
            $pl->color = $colorValue;
            $pl->size = $sizeValue;
            $pl->color_code = $colorCodeValue;
            $pl->create_staff = Auth::guard('admin')->id();
            $pl->created_at = Carbon::now();
            $pl->save();
            $codeCounter++;
        }
        }
                if ($request->hasFile('product_image') && count($request->file('product_image')) > 0) {
                    foreach ($request->file('product_image') as $image) {
                        $path = $image->store('product_images', 'public');
                        $productImage = new ProductImage();
                        $productImage->product_id = $product->id;
                        $productImage->product_image = $path;
                        $productImage->create_staff = Auth::guard('admin')->id();
                        $productImage->created_at = Carbon::now();
                        $productImage->save();
                    }
                }
                DB::commit();
                return redirect()->route('product.index')->with('success', 'Sản phẩm đã được thêm thành công.');
    
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
            }
        }
    
        public function destroy($id)
        {
            DB::beginTransaction();
        
            try {
                $product = Product::findOrFail($id);
        
                // Lấy thời gian xóa
                $deletedAt = Carbon::now();
                $deleteStaff = Auth::guard('admin')->id(); // Lấy ID của người xóa
        
                // Xóa các product_class liên quan và cập nhật thông tin xóa
                ProductClass::where('product_id', $id)->each(function ($productClass) use ($deleteStaff, $deletedAt) {
                    // Cập nhật thông tin xóa
                    $productClass->delete_staff = $deleteStaff;
                    $productClass->deleted_at = $deletedAt;
                    $productClass->save(); // Lưu thay đổi trước khi xóa
                    $productClass->delete(); // Thực hiện xóa
                });
        
                // Xóa các product_images liên quan và cập nhật thông tin xóa
                ProductImage::where('product_id', $id)->each(function ($productImage) use ($deleteStaff, $deletedAt) {
                    // Cập nhật thông tin xóa
                    $productImage->delete_staff = $deleteStaff;
                    $productImage->deleted_at = $deletedAt;
                    $productImage->save(); // Lưu thay đổi trước khi xóa
                    $productImage->delete(); // Thực hiện xóa
                });
        
                // Soft delete sản phẩm chính và cập nhật thông tin xóa
                $product->deleted_at = $deletedAt;
                $product->delete_staff = $deleteStaff; 
                $product->save(); // Lưu thông tin xóa sản phẩm chính
        
                DB::commit();
        
                return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa thành công vào lúc: ' . $deletedAt);
            } catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
            }
        }
        
    
    
    
    public function edit($id)
    {
        $product = Product::with(['category', 'maker', 'productClasses', 'productImages'])->findOrFail($id);
        $makers = Maker::all();
        $categories = Category::all();
        $productClasses = ProductClass::where('product_id', $id)->get();
        
        $sizes = $productClasses->pluck('size')->unique()->toArray();
        
        $colorPairs = $productClasses->map(function ($productClass) {
            return [
                'color' => $productClass->color,
                'color_code' => $productClass->color_code,
            ];
        })->unique()->toArray();
        return view('product.edit', compact('product', 'makers', 'categories', 'colorPairs', 'sizes', 'productClasses'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_code' => 'required|string|max:255|unique:product,product_code,' . $id,
            'product_name' => 'required|string|max:255',
            'maker_id' => 'required|exists:maker,id',
            'category_id' => 'required|exists:category,id',
            'note' => 'nullable|string',
            'product_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'color' => 'nullable|array',
            'color.*' => 'nullable|string|max:255',
            'color_code' => 'nullable|array',
            'color_code.*' => 'nullable|string|max:255',
            'size' => 'nullable|array',
            'size.*' => 'nullable|string|max:255',
        ]);
    
        DB::beginTransaction();
    
        try {
            $product = Product::findOrFail($id);
            $product->update([
                'product_code' => $validatedData['product_code'],
                'product_name' => $validatedData['product_name'],
                'maker_id' => $validatedData['maker_id'],
                'category_id' => $validatedData['category_id'],
                'note' => $validatedData['note'],
                'update_staff' => Auth::guard('admin')->id(),
            ]);
    
            $colors = collect($request->color)->filter()->values();
            $colorCodes = collect($request->color_code)->filter()->values();
            $sizes = collect($request->size)->filter()->values();
    
            // Nếu không nhập màu, lấy danh sách màu hiện có trong database
            if ($colors->isEmpty()) {
                $existingColors = ProductClass::where('product_id', $product->id)
                    ->select('color', 'color_code')
                    ->distinct()
                    ->get();
    
                $colors = $existingColors->pluck('color');
                $colorCodes = $existingColors->pluck('color_code');
            }
    
            $existingCount = ProductClass::where('product_id', $product->id)->count();
            $codeCounter = $existingCount + 1;
    
            // Ghép màu với size để tạo danh sách cần thêm/cập nhật
            $submittedCombinations = collect($colors)
                ->map(function ($color, $index) use ($colorCodes) {
                    return [
                        'color' => $color,
                        'color_code' => $colorCodes[$index] ?? '-',
                    ];
                })
                ->flatMap(function ($colorPair) use ($sizes) {
                    return $sizes->map(function ($size) use ($colorPair) {
                        return array_merge($colorPair, ['size' => $size]);
                    });
                })
                ->unique();
    
            foreach ($submittedCombinations as $combination) {
                $color = $combination['color'];
                $size = $combination['size'];
                $colorCode = $combination['color_code'];
    
                $pl = ProductClass::withTrashed()
                    ->where('product_id', $product->id)
                    ->where('color', $color)
                    ->where('color_code', $colorCode)
                    ->where('size', $size)
                    ->first();
    
                if ($pl && $pl->trashed()) {
                    $pl->restore();
                } elseif (!$pl) {
                    $pl = new ProductClass([
                        'product_id' => $product->id,
                        'color' => $color,
                        'size' => $size,
                        'color_code' => $colorCode,
                        'product_code' => $product->product_code . '-' . str_pad($codeCounter, 3, '0', STR_PAD_LEFT),
                    ]);
                    $codeCounter++;
                }
    
                $pl->updated_at = now();
                $pl->update_staff = Auth::guard('admin')->id();;
                $pl->save();
            }
            if ($request->hasFile('product_image')) {
                                        foreach ($request->file('product_image') as $image) {
                                            $path = $image->store('product_images', 'public');
                            
                                            $existingProductImage = ProductImage::where('product_id', $product->id)
                                                ->where('product_image', $path)
                                                ->first();
                            
                                            if (!$existingProductImage) {
                                                $productImage = new ProductImage();
                                                $productImage->product_id = $product->id;
                                                $productImage->product_image = $path;
                                                $productImage->updated_at = now();
                                                $productImage->update_staff = Auth::guard('admin')->id();
                                                $productImage->save();
                                            }
                                        }
                                    }
                                    if ($request->has('deleted_images')) {
                                        foreach ($request->input('deleted_images') as $imageId) {
                                            if ($imageId) {
                                                $productImage = ProductImage::find($imageId);
                                                if ($productImage) {
                                                    $productImage->delete_staff = Auth::guard('admin')->id();
                                                    $productImage->save();
                                                    $productImage->delete();
                                                }
                                            }
                                        }
                                    }
    
            DB::commit();
            return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            logger('Lỗi: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }
    
    
}