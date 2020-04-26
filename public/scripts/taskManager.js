$(document).ready(function() {
    
    $('#example').DataTable( {
        "order": [[ 1, "desc" ]],
        "bFilter": false,
        "info": false,
        "lengthChange": false,
        "pageLength": 3,
        "language": {
            "paginate": {
                "next":       "Вперед",
                "previous":   "Назад"
             },
        }
    } );


    $('#description').change(function() {
        $('input[name="edit"]').attr("value", "1");
        $(message).show();
    });
    
    if( $('input[name="edit"]').val()==1){$(message).show()}
    

} 



);