</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('/admin/')}}/vendor/jquery/jquery.min.js"></script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.textarea' });</script>


<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/admin/')}}/vendor/metisMenu/metisMenu.min.js"></script>

<script src="{{asset('/admin/')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/admin/')}}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="{{asset('/admin/')}}/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('/admin/')}}/vendor/raphael/raphael.min.js"></script>
{{--<script src="{{asset('/admin/')}}/vendor/morrisjs/morris.min.js"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{asset('/admin/')}}/dist/js/sb-admin-2.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="district_name"]').on('change', function() {
            var districtId = $(this).val();
            if(districtId) {
                $.ajax({
                    url: '/add-project/ajax/'+districtId,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="area_name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="area_name"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });

                    }
                });
            }else{
                $('select[name="area_name"]').empty();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
