
        @if(session('success_delete'))
            <script>
                Swal.fire({
                    title: 'Deleted Post',
                    text: '{{ session('success_delete') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
            </script>
        @endif

        @if(session('success_add'))
            <script>
                Swal.fire({
                    title: 'Added Post',
                    text: '{{ session('success_add') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
            </script>
        @endif

        @if(session('success_update'))
            <script>
                Swal.fire({
                    title: 'Updated Post',
                    text: '{{ session('success_update') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
            </script>
        @endif

@yield('content')