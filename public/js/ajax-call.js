function MeGusta(id){
    
    var ruta = Routing.generate('likes');
    $.ajax({
        type:'POST',
        url:ruta,
        data: ({id:id}),
        async:true,
        dataType:"json",
        sucess: function(data){
            window.location.reload();
        }

    });

}