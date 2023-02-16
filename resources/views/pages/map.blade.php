<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@1.1.3/dist/tippy.css">

    <style type="text/css">
        .map-container{padding:3.2rem .8rem;position:relative;display:inline-block}.map-container img{width:100%}.map-container .point{cursor:pointer;position:absolute;width:.9rem;height:.9rem;background-color:orange;border-radius:50%;transition:.3s;will-change:transform,box-shadow;transform:translate(-50%,-50%);box-shadow:0 0 0 rgba(0,172,193,.4);animation:3s infinite pulse}.map-container .point:hover{animation:none;transform:translate(-50%,-50%) scale3D(1.35,1.35,1);box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)}.map-container .Hubli{top:48%;left:68%}.map-container .Bengaluru{top:48%;left:69%; background: red}.map-container .Mumbai{top:45%;left:68%}.map-container .JammuKashmir{top:38%;left:69%}.map-container .Hyderabad{top:46%;left:69%}.map-container .Chennai{top:50%;left:70%}.map-container .DelhiNCR{top:42%;left:69%}.map-container .UnitedStates{top:35%;left:15%}.map-container .SingaporeAPAC{top:55%;left:80%}.map-container .Dubai{top:42%;left:62%}.map-container .india{top:58%;left:68%}@keyframes pulse{0%{box-shadow:0 0 0 0 rgba(0,172,193,.5)}70%{box-shadow:0 0 0 25px rgba(0,172,193,0)}100%{box-shadow:0 0 0 0 rgba(0,172,193,0)}}
    </style>
</head>

<body>

    <div class="container" style="display: flex; align-items: center; justify-content: center;">
        <div class="map-container">
            <img src="http://res.cloudinary.com/slzr/image/upload/v1500321012/world-map-1500_vvekl5.png">
            <a href="https://www.google.com/maps?q=IBMR, Co-working &amp; Startups, 3rd floor, Akshay Plaza, Akshay colony, Vidyanagar, Hubli - 580021"
                target="_blank">
                <div class="point Hubli tippy"
                    title="<b>Fidelis Technologies Services Pvt. Ltd.</b><br>IBMR, Co-working &amp; Startups, 3rd floor, Akshay Plaza, Akshay colony, Vidyanagar, Hubli - 580021">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=No. 357, 1st Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka - 560034, INDIA" target="_blank">
                <div class="point Bengaluru tippy" title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>No. 357, 1st & 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=Suprabhat, Bldg No. 46, Office No: 2250 Gandhinagar, Bandra (East), Near MIG Cricket Club, Bandra Kalanagar Complex, Opp MHADA Office, Mumbai – 400051, INDIA"
                target="_blank">
                <div class="point Mumbai tippy"
                    title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>Suprabhat, Bldg No. 46, Office No: 2250 Gandhinagar, Bandra (East), Near MIG Cricket Club, Bandra Kalanagar Complex, Opp MHADA Office, Mumbai – 400051, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=#72, Naikpora, Padshahi Bagh Srinagar, Kashmir-190008, INDIA"
                target="_blank">
                <div class="point JammuKashmir tippy"
                    title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>#72, Naikpora, Padshahi Bagh Srinagar, Kashmir-190008, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=Phoenix Tech Tower Private Limited, Genpact Road Plot No.14/46, 1st Floor, Phoenix Tech Tower, Uppal, Hyderabad, Telangana-500039, INDIA"
                target="_blank">
                <div class="point Hyderabad tippy"
                    title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>Phoenix Tech Tower Private Limited, Genpact Road Plot No.14/46, 1st Floor, Phoenix Tech Tower, Uppal, Hyderabad, Telangana-500039, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=KRM Plaza, 8th, South Tower, KRM Plaza, Harrington Road 2, Chetpet, Chennai, Tamil Nadu-600031, INDIA"
                target="_blank">
                <div class="point Chennai tippy"
                    title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>KRM Plaza, 8th, South Tower, KRM Plaza, Harrington Road 2, Chetpet, Chennai, Tamil Nadu-600031, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=Unitech Cyber Park, Tower- B, 10th Floor, Unitech Cyber Park, Sector 39, Gurugram, Haryana-12200, INDIA"
                target="_blank">
                <div class="point DelhiNCR tippy"
                    title="<b>Fidelis Technology Services Pvt. Ltd.</b><br>Unitech Cyber Park, Tower- B, 10th Floor, Unitech Cyber Park, Sector 39, Gurugram, Haryana-12200, INDIA">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=2609 Crooks Road #216,Troy, Michigan State, USA 48084"
                target="_blank">
                <div class="point UnitedStates tippy"
                    title="<b>Fidelis Group, INC,</b><br>2609 Crooks Road #216,Troy, Michigan State, USA 48084"></div>
            </a>
            <a href="https://www.google.com/maps?q=111 Somerset Road, #08-10A, 111 Somerset, Singapore, 238164, Singapore"
                target="_blank">
                <div class="point SingaporeAPAC tippy"
                    title="<b>Fidelis Technologies Pte Ltd</b><br>111 Somerset Road, #08-10A, 111 Somerset, Singapore, 238164, Singapore">
                </div>
            </a>
            <a href="https://www.google.com/maps?q=Office 08 J-0118, Warehouse -P1, Block J, Saih Shuaib 2, Dubai, UAE"
                target="_blank">
                <div class="point Dubai tippy"
                    title="<b>Fidelis Technologies</b><br>Office 08 J-0118, Warehouse -P1, Block J, Saih Shuaib 2, Dubai, UAE">
                </div>
            </a>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    
    <script src="https://unpkg.com/tippy.js@1.1.3/dist/tippy.min.js"></script>

    <script>
        $(document).ready(function() {
            tippy('.tippy', {
                theme: 'light',
                size: 'big',
                arrow: true
            })
        });
    </script>

</body>

</html>
