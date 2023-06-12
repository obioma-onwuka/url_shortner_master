<x-main>

    @section('title', 'Password Generator')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Password Generator</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Password Generator</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    @if(session()->has('error'))
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-danger ps-4">
                                Snap 🤦‍♂️
                            </h6>
                            <h3 class="mt-2 text-danger">Error! {{$message}}</h3>
                        </div>
                    @else

                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="position-relative d-inline text-primary ps-4">
                            Welcome To The Password Generator
                        </h6>
                        <h3 class="mt-2">We do not store generated passwords.</h3>
                    </div>

                    @endif
                    
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form action = "/generated" method = "POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">

                                    <div class="form-group">
                                        <label for="subject">Password Length: (8 - 100)</label>
                                        <input type="number" class="form-control mt-2" name = "length" min = "8" max = "100" value = "8" onpaste="return false;"  ondrop="return false;"  onkeypress="return IsNumeric(event);">
                                    </div>


                                    <div class="form-group pt-3 row">
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">

                                            <input type="checkbox" id="uppercase" name="uppercase" value="1">
                                            <label for="subject">Include Uppercase Letters?</label>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-2">

                                            <input type="checkbox" id="lowercase" name="lowercase" value="1">
                                            <label for="subject">Include Lowercase Letters?</label>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <input type="checkbox" id="symbols" name="symbols" value="1">
                                            <label for="subject">Include Symbols?</label>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <input type="checkbox" id="numbers" name="numbers" value="1">
                                            <label for="subject">Include Numbers?</label>

                                        </div>

                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">
                                        Generate
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main>

<script type="text/javascript">
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace
    function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        
        return ret;
    }
</script>