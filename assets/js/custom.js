$('.marquee').marquee({
    duration: 7000,
    pauseOnHover: true
});

function JSalert() {
    console.log("Alerted!!");
    swal({
        title: "Good job!",
        text: "New Slider Content Added Successfully!",
        icon: "success",
        button: "OK!",
    });
    window.location.replace('index.php');
}

function JSalert_failed() {
    swal({
        title: "Good job!",
        text: "New Slider Content Added Successfully!",
        icon: "success",
        button: "OK!",
    });
    window.location.replace('index.php');
}