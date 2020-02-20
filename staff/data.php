<?php include_once('../_header.php'); ?>

    <div class="box">
        
        <h1>Staff</h1>
        <h4>
            <small>List of Staff</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Add Staff</i></a>
            </div>    
        </h4>
           
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="staff">
                <thead>
                        <th>Name</th>
                        <th>No IC</th>
                        <th>Email</th> 
                        <th>Date</th>
                        <th>Level</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead> 
            </table>
        </div>
        <script>
        $(document).ready(function() {
            $('#staff').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "staff_data.php",
                //scroll function at the table
                //scrollY : '250px',
                dom : 'Bfrtip',
                buttons : [
                    {
                        extend : 'pdf',
                        orientation : 'potrait',
                        pageSize : 'Legal',
                        title : 'List of Staff',
                        download : 'open'
                    },
                    'excel', 'print'
                ],
                columnDefs : [
                    {
                        "searchable" : "false",
                        "orderable" : "false",
                        "targets" : 5,
                        "render" : function (data, type, row) {
                            var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a><a href=\"delete.php?id="+data+"\" onclick=\"return confirm('Are you sure you want to delete?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
                            return btn;
                            
                        }
                    }
                ]
            } );
        } );
        </script>    
    </div>

<?php include_once('../_footer.php'); ?>