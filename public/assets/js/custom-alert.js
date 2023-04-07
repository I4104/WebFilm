function mySwal(title, message, type, reload) {
    var img = "";
    switch (type) {
        case "success":
            img = "/assets/icons/success.png";
            break;
        case "error":
            img = "/assets/icons/error.png";
            break;
        case "warning":
            img = "/assets/icons/warning.png";
            break;
    }
    
    swal({        
        title: 'Alert!',        
        text: 'Content',        
        imageUrl: img,        
        imageHeight: 80, 
        imageWidth: 80,       
        imageClass:'img-responsive rounded-circle',        
        animation: false        
    }).then(() => {
        if (reload) {
            window.location.reload();
        }
    });
}