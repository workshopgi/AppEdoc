<x-header />
<body>


<style>
h1{
  margin-top:20px;
  margin-bottom:30px;

}
</style>
<h1 class="text-center"> Share File </h1>
<div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-5">
                <form action="contact " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="text" name="subject"  placeholder="*Subject" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="email" name="email" placeholder="*E-mail" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <textarea class="form-control" name="message" placeholder="*Your Message" rows="5" required="required"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                  <input class="form-control-file"  type="file" name="docx"  required="required" >
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-primary" type="submit">Send</button>
                    <button type="submit" class="btn btn-outline-dark">Clear</button>
                  </div>
                </div>
              </form>
         </div>
       </div>
        </div>
        </body>
        <x-footer />
