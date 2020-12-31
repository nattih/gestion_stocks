@include('include.header')
<main id="main" >
  <div class="section-title" >
    <h2 ><strong>CATEGORIES PRODUITS</strong></strong></h2> 
  </div>
  <div class="table responsive">
      <div class="container">
           <a class="btn btn-primary" href="{{ route('categorie.nouveau') }}">Ajouter une categorie</a>
        <section id="portfolio" class="portfolio section-bg mt-2">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">Toutes les categories</li>
                </ul>
              </div>
            </div>
            <div class="row portfolio-container h-100" data-aos="fade-up" data-aos-delay="100" >
              @foreach($categories as $categorie)
                <div class="col-3">
                  <div class="row d-flex justify-content-space-center align-items-center">
                    <a href="{{route('categorie.details',['categorie'=>$categorie->nom,'id'=>$categorie->id])}}">{{$categorie->nom}}</a>
                  </div>
                  <div class="row">
                      <img src="{{asset('storage').'/'.$categorie->photo}}" class="img-fluid" alt="" style="width:150px;height:150px;" class="bf5 border rounded-circle">
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </section>
      </div>
  </div>
</main><!-- End #main -->
@include('include.footer')