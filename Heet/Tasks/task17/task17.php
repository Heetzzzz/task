<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script>
        // $(document).ready(function ()
        // {
        //     $('#dt thead th').each(function () {
        //         var title = $(this).text();
        //         $(this).html(title+' <input type="text" class="col-search-input" placeholder="Search ' + title + '" />');
        //     });

            //$(document).ready(function() {
        //         var table = $('#dt').dataTable({
        //             "processing": true,
        //             "serverSide": true,
        //             "ajax": "serverside.php"
        //         } );
        // // });
            
            //table.columns().every(function () {
                // var table = this;
                // $('input', this.header()).on('keyup change', function () {
                //     if (table.search() !== this.value) {
                //            table.search(this.value).draw();
                //     }
                // });
            // });
        //     $("#dt tfoot input").on( 'keyup change', function () {
        //         table
        //             .column( $(this).parent().index()+':visible' )
        //             .search( this.value )
        //             .draw();
        //     });
        // });

</script>
    </head>
    <body>
        <br>
        <br>
        <div class="container">
            <div class="table-responsive">
                <table id="dt" class="display nowrap bg-warning" cellspacing="0" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>DOB</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Source</th>
                            <th>Compaign</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>DOB</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Source</th>
                            <th>Compaign</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
    <script>
        $(document).ready(function() {
            var table = $('#dt').dataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "serverside.php"
            } );
        });
    </script>