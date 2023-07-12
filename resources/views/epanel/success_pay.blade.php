
@extends('cpanel.layoutt')
@section('content')


<br>
<div class="dummy-positioning d-flex" id="text">
  
    <div class="success-icon">
      <div class="success-icon__tip"></div>
      <div class="success-icon__long"></div>
    </div>
    
    <h1 id="text"> Successfull Tansaction</h1>
  </div>



    <br>

    
<style>
    #text{
        padding-top: 100px;
        font-size: 50px;
        text-align: center;
        color: #28A745;
        font-family: Helvetica, sans-serif;
    }

    .dummy-positioning {
  width: 100%;
  height: 100vh;
  align-items: center;
  justify-content: center;
}

.success-icon {
  display: inline-block;
  width: 8em;
  height: 8em;
  font-size: 20px;
  border-radius: 50%;
  border: 4px solid #96df8f;
  background-color: #fff;
  position: relative;
  overflow: hidden;
  transform-origin: center;
  -webkit-animation: showSuccess 180ms ease-in-out;
          animation: showSuccess 180ms ease-in-out;
  transform: scale(1);
}

.success-icon__tip, .success-icon__long {
  display: block;
  position: absolute;
  height: 4px;
  background-color: #96df8f;
  border-radius: 10px;
}
.success-icon__tip {
  width: 2.4em;
  top: 4.3em;
  left: 1.4em;
  transform: rotate(45deg);
  -webkit-animation: tipInPlace 300ms ease-in-out;
          animation: tipInPlace 300ms ease-in-out;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: 180ms;
          animation-delay: 180ms;
  visibility: hidden;
}
.success-icon__long {
  width: 4em;
  transform: rotate(-45deg);
  top: 3.7em;
  left: 2.75em;
  -webkit-animation: longInPlace 140ms ease-in-out;
          animation: longInPlace 140ms ease-in-out;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  visibility: hidden;
  -webkit-animation-delay: 440ms;
          animation-delay: 440ms;
}

@-webkit-keyframes showSuccess {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}

@keyframes showSuccess {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}
@-webkit-keyframes tipInPlace {
  from {
    width: 0em;
    top: 0em;
    left: -1.6em;
  }
  to {
    width: 2.4em;
    top: 4.3em;
    left: 1.4em;
    visibility: visible;
  }
}
@keyframes tipInPlace {
  from {
    width: 0em;
    top: 0em;
    left: -1.6em;
  }
  to {
    width: 2.4em;
    top: 4.3em;
    left: 1.4em;
    visibility: visible;
  }
}
@-webkit-keyframes longInPlace {
  from {
    width: 0em;
    top: 5.1em;
    left: 3.2em;
  }
  to {
    width: 4em;
    top: 3.7em;
    left: 2.75em;
    visibility: visible;
  }
}
@keyframes longInPlace {
  from {
    width: 0em;
    top: 5.1em;
    left: 3.2em;
  }
  to {
    width: 4em;
    top: 3.7em;
    left: 2.75em;
    visibility: visible;
  }
}
    </style>


@endsection