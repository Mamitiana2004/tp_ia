 @extends('admin.index')
 

@section('body') 

  <div class="inner-block">
 
     <div class="market-updates text-center"> 
<style>
.pt-3-half {
    padding-top: 1.4rem;
}
.new-publication {
    padding: 0.5em 0;
    text-align: left;
}
</style>
<!-- Editable table -->
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Liste des publications</h3>
    <hr/>
    <?php 
         $message = Session::get('message');
         if($message) {
    ?>
        <h4 class="alert alert-success"> <?php echo $message; ?>  </h4>
    <?php Session::put('message',NULL); } ?> 

    <div class="new-publication">
    <a href="{{URL::to('/admin/publications/ajouter')}} "><span><button type="button" class="btn btn-success btn-rounded btn-sm my-0">Nouvelle publication</button></span></a> 
    </div>
    <div class="card-body">
        <div id="table" class="table-editable">
           
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <tr>
              <th class="text-center">ID</th>
              <th class="text-center">Titre</th>
              <th class="text-center">Image 1</th>
              <!--th class="text-center">Catégorie</th-->
             <th class="text-center">Action</th>
          </tr>
          @foreach($publications as $publication)
          <tr>
              <td class="pt-3-half" contenteditable="true">{{ $publication->id }}</td>
              <td class="pt-3-half" contenteditable="true">{{ $publication->titre }}</td>
              <td class="pt-3-half" contenteditable="true"><img src="{{URL($publication->image1)}}" height="150px;" width="150px;" alt=""> </td>
              <!--td class="pt-3-half" contenteditable="true">{{ $publication->categorie }}</td-->
              <td>
                  <a onclick="return confirm('Voulez-vous supprimer cette publication ?');" href="{{URL::to('admin/publications/delete/'.$publication->id)}} "> <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Supprimer</button></span></a> 

                   <a href="{{URL::to('/admin/publications/edit/'.$publication->id)}} "><span><button type="button" class="btn btn-success btn-rounded btn-sm my-0">Modifier</button></span></a> 
              </td>
          </tr>
          @endforeach
          <!-- This is our clonable table line -->
          
      </table>
        </div>
    </div>
</div>
<!-- Editable table -->





</div>
</div>
 <div class="inner-block">
 <div class="market-updates text-center"> 
    </div>
</div> <div class="inner-block">
 <div class="market-updates text-center"> 
    </div>
</div> 
   @endsection