@extends('student_backend.layouts.app')

@section('content')
<style>
.video_img{
		width:50px;
		height:35px;
        
	}
    #cardspace{
        padding-left: 0px;
        padding-right: 0px;
        margin-left: 0px;
        margin-right: 0px;
    }
    .card-img-top{
		width:100%;
		height:180px;
	}

</style>

    <div class="row">
        <div class="container">
                    
            <div class="row mt-5">

                <div id="card_2" class="row layout-spacing">
                    <div class="statbox widget box box-shadow col-lg-12">
                        <div class="widget-header">
                            <div class="container">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>English</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" onclick="loadVideo(1)"  data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img.jpg')}}"  class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">Introduction  to Biology</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" onclick="loadVideo(2)" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img2.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">Evolution and diversity of organisms</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img3.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">Plant form and function</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                    <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                        <img src="{{asset('backend/images/img4.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <center><h5 class="card-title">Animal form and function</h5></center>
                                        
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4 my-3">
                                        <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">Genetics</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                    <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                        <img src="{{asset('backend/images/img2.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <center><h5 class="card-title">Environmental Biology</h5></center>
                                        
                                        </div>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                           

                        </div>

                        
                    </div>
                </div>

                <div id="card_2" class="row layout-spacing">
                    <div class="statbox widget box box-shadow col-lg-12">
                        <div class="widget-header">
                            <div class="container">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Sinhala</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" onclick="loadVideo(1)"  data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img.jpg')}}"  class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">ජීව විද්‍යාව හදුන්වා දීම</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" onclick="loadVideo(2)" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img2.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">පරිණාමය හා ජීවින්ගේ විවිධත්වය</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                        <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img3.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">ශාක ආකාරය හා ක්‍රියාකාරිත්වය</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                    <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                        <img src="{{asset('backend/images/img4.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <center><h5 class="card-title">සත්ව ආකාරය හා ක්‍රියාකාරිත්වය</h5></center>
                                        
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4 my-3">
                                        <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="{{asset('backend/images/img.jpg')}}" class="card-img-top" alt="widget-card-2">
                                            <div class="card-body">
                                                <center><h5 class="card-title">ප්‍රවේණිය</h5></center>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                                    <div id="cardspace"  class="card component-card_2" data-toggle="modal" data-target="#exampleModalCenter">
                                        <img src="{{asset('backend/images/img2.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <center><h5 class="card-title">පාරිසරික ජීව විද්‍යාව</h5></center>
                                        
                                        </div>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                           

                        </div>

                        
                    </div>
                </div>
                {{-- <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Sinhala</h4>
                                </div>                 
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="row">
                                <div class="col-12 mx-auto">
                                
                                    <ol>
                                        <li class="mt-2" data-toggle="modal" data-target="#exampleModalCenter"><img src="{{asset('backend/images/youtube.png')}}" class="video_img mr-1" alt="video image">Link 1</li>
                                        <li class="mt-2"  data-toggle="modal" data-target="#exampleModalCenter"><img src="{{asset('backend/images/youtube.png')}}" class="video_img mr-1" alt="video image">Link 2</li>

                                    </ol>
                            
                            </div>                                         
                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>
          
        

            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="container">
                            <h5 class="modal-title" id="exampleModalLongTitle">Video</h5>
                            <button type="button" class="close" onclick="stopVideo()" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal-body">
                        <div class="row"> 
                            {{-- <iframe class="responsive-iframe"
                            src="https://drive.google.com/file/d/1OskR_SdqwFmjEGa2VHKKzf3PDtnUnJa-/view">
                            </iframe>  --}}
                            <video class="mb-4" id="video" width="100%" height="340" autoplay controls controlsList="nodownload" style="position: relative; overflow: hidden;">
                                <div class="container">
                                    <source type="video/mp4">
                                </div>
                                
                            
                            </video>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-secondary" onclick="stopVideo()" data-dismiss="modal">Close</button>
                          </div>
                        
                    
                    
                    
                    </div>
                    
                </div>
                </div>
            </div>

            

        </div>

    </div>
   

    

<script>
    function loadVideo(index)
    {
        let index_id = index;
        
        if(index_id == 1)
        {
            var video = document.getElementById('video');
            var source = document.createElement('source');

            source.setAttribute('src', "{{asset('backend/videos/video.mp4')}}");

            video.appendChild(source);
            video.play();
        }

        else if(index_id == 2)
        {
            var video = document.getElementById('video');
            var source = document.createElement('source');

            source.setAttribute('src', "https://buynear.stepheninnovations.com/video1.mp4");

            video.appendChild(source);
            video.play();
        }
    }
  
   
  
       
    
</script>
<script>
    var video = document.getElementById("video");
    function stopVideo(){
         video.pause();
         video.currentTime = 0;
    }

        $("#stop").on('click', function(){
        stopVideo();
    });
</script>

@endsection