@if(session('success_signup'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success_signup') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@yield('successSignUp')


@if(session('success_login'))
    <script>
        Swal.fire({
            title: 'Success',
            text: '{{ session('success_login') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@yield('successSignIn')
