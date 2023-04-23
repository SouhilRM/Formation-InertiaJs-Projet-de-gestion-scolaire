export function sweetAlert(type, message){
    Swal.fire({
        toast: true,
        icon: type,
        title: message,
        //animation: false,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
    })
}
