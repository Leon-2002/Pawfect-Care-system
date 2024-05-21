
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/template dashboard/styles.css" />
    <title>Tempaw Care</title>

    

    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @notifyCss
</head>
<style>

[class^=flaticon-]:before,
[class*=" flaticon-"]:before,
[class^=flaticon-]:after,
[class*=" flaticon-"]:after {
    font-size: inherit;
    margin-left: 0;
}


/*for personal and random card*/
body{
    background: #eee;
}
span{
    font-size:20px;
}

.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius: 20px;
    padding:60px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.title{
    font-size: 30px;
}
.fa{
     color:#20a151;
}

</style>
<body>
    
    
    <div class="d-flex" id="wrapper">
        @include('user.layout.sidebar')

        <!-- Page Content -->
        @include('user.layout.header')

            <div class="container-fluid px-4">

             
              @auth
              @if (Auth::user() && Auth::user()->region == '')
                  <x-notify::notify />
                  
              @endif
          @endauth
             
          <x-notify::notify />
          @notifyJs



                          

        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               
                        <div class="box-part text-center">
                            
                            <i class="fa fa-book fa-4x m-3" aria-hidden="true"></i>
                            
                            <div class="title">
                                <h2>Personal Booking</h2>
                            </div>
                            
                            <div class="text">
                                <span>Ensure your pet receives personalized, top-notch care with personal booking. Tailored to your pet's specific needs, it's the best choice for peace of mind.  </span>
                            </div>
                            
                            <a href="/user/personalBooking"><button class="btn btn-outline-success">Book now</button></a>
                            
                         </div>
                    </div>	 
                    
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   
                        <div class="box-part text-center">
                            
                            
                            <i class=" fa fa-solid fa-magnifying-glass fa-4x m-3" aria-hidden="true"></i>
                        
                            <div class="title">
                                <h4>Random Booking</h4>
                            </div>
                            
                            <div class="text">
                                <span>Embrace the thrill of the unexpected with random booking, where every pet care experience is a new adventure.  It's the best choice for someone who can't decide!</span>
                            </div>
                            
                            
                            <a href="/user/bookings"><button class="btn btn-outline-success">Book now</button></a>
                            
                         </div>
                    </div>	 
                </div>
            </div>
        </div>
      









                
                <!-- Services Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center"   >
                    <div class="border-start border-5 ps-5 mb-5" style="max-width: 600px; border-color: transparent;">
                        <h6 class="text-danger text-uppercase">Services</h6>
                        <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
                    </div>
                </div>
                
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-house display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                                <p>Ensure peace of mind while you're away, with top-notch pet boarding services for your furry friends</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-vaccine display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet healthcare</h5>
                                <p>Providing expert pet treatment with love and dedication, ensuring your companion's health and happiness</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-grooming display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                                <p>Pamper your pet with our professional grooming services, keeping them happy, healthy, and stylish</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-cat display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Training</h5>
                                <p>Transform your pet into a well-behaved companion with our effective and personalized training programs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-dog display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Sitting</h5>
                                <p>Give your pet the attention they deserve with our trustworthy and personalized pet sitting services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="bi bi-heart display-1 text-danger me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Mating  </h5>
                                <p>Facilitating responsible pet mating for healthy and happy furry companions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
      
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>   

    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };




      // Your JavaScript code here
      document.addEventListener('DOMContentLoaded', function () {
          const linkColor = document.querySelectorAll('.list-group-item');
  
          function colorLink() {
              linkColor.forEach(l => l.classList.remove('active'));
              this.classList.add('active');
          }
  
          linkColor.forEach(l => l.addEventListener('click', colorLink));
      });
  </script>
</body>

</html>