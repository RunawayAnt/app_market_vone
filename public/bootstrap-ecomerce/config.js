$(document).ready(function() {
 
    function Listardatos() {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "{{ route('agregados') }}",
                datatype: 'json',
                success: function(data) {
                    resolve(data)
                },
                error: function(err){
                    reject(err)
                }
            });
        })
    }

    Listardatos()
        .then(res =>{
           console.log(res);
        })
        .catch(err => {
            console.log(err);
        })


})