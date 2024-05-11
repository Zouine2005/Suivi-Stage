@include('layouts.master')
<style>
     /* Centrer verticalement */
     html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
</style>
    <div  class="container text-center">
       
        <h1>Message</h1>
        <p>{{ $message }}</p>
    </div>
<b