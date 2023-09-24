@extends('layouts.main2')
@section('container')
@include('layouts.navbar')
@include('layouts.content')
@include('tombolwa')
@include('layouts.footer')

<script>
    // $(document).ready(function () {
    //     $('#filter-form, #kelas-form').on('change', function () {
    //         filterData();
    //     });

    //     function filterData() {
    //         var category = $('#filter-form select[name="category"]').val();
    //         var kelas = $('#kelas-form select[name="kelas"]').val();

    //         $.ajax({
    //             url: '{{ route('content.filter') }}',
    //             type: 'get',
    //             data: {
    //                 category: category,
    //                 kelas: kelas
    //             },
    //             success: function (data) {
    //                 // Update tampilan dengan data yang diterima dari server
    //                 // Anda dapat mengganti tampilan sesuai dengan data yang diterima
    //             }
    //         });
    //     }
    // });


    $(document).ready(function () {
        $("select[name='category']").val("{{ request('category') }}");
        $("select[name='kelas']").val("{{ request('kelas') }}");
        
        $("select[name='category']").change(function () {
            $(this).closest("form").submit();
        });

        $("select[name='kelas']").change(function () {
            $(this).closest("form").submit();
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</body>

</html>

@endsection


