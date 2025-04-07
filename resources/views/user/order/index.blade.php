@extends('layout.master')

@section('title', 'Thanh toán thành công')

@section('content')
    @if(session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Thành công!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    confirmButtonColor: "#8B3A3A", 
                    confirmButtonText: "OK",
                    customClass: {
                        popup: 'custom-popup'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('home') }}"; 
                    }
                });
            });
        </script>
    @endif
@endsection
