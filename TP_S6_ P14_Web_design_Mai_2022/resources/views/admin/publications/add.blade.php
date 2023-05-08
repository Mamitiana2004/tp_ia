@extends('admin.index')

@section('body') 
<link rel="stylesheet" href="/css/bootstrap.min.css" >

<style type="text/css">
.ck-editor__editable {
       min-height: 250px;
}
</style>

<div class="inner-block">
 
    <div class="market-updates text-center"> 

        <div class="container">
            <div class="col-md-10">
                <div class="form-area">  
                    <form role="form" method="post" action="{{route('publication_insert')}} "  enctype="multipart/form-data" >
                        {{csrf_field()}}
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Ajouter une nouvelle publication</h3>
                    <?php 
                        $message = Session::get('message');
                        if($message){
                    ?>
                        <h4 class="alert alert-success"> <?php echo $message; ?>  </h4>
                    <?php
                        Session::put('message',NULL); }
                    ?>  
                   
                    <label style="text-align:left;width:100%;">Titre</label>
                    <div class="form-group">
                       <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrer le titre de la publication" required>
                    </div>

                    <label style="text-align:left;width:100%;">Contenu</label> 
                    <div class="form-group">
                        <textarea id="contenu" name="contenu"></textarea>
                    </div>
                    
                    <label style="text-align:left;width:100%;">Auteur</label>
                    <div class="form-group">
                       <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrer l'auteur de la publication" required>
                    </div>

                    <label style="text-align:left;width:100%;">Date</label>
                    <div class="form-group">
                       <input type="text" class="form-control" id="date_publication" name="date_publication" placeholder="Entrer la date de la publication" required>
                    </div>

                    <label style="text-align:left;width:100%;">Image 1</label>
                    <div class="form-group">
                       <input type="file" class="form-control" id="image1" name="image1" required>
                    </div>
                    
                    <label style="text-align:left;width:100%;">Image 2</label>
                    <div class="form-group">
                       <input type="file" class="form-control" id="image2" name="image2">
                    </div>

                    <label style="text-align:left;width:100%;">Image 3</label>
                    <div class="form-group">
                       <input type="file" class="form-control" id="image3" name="image3">
                    </div>

                    <label style="text-align:left;width:100%;">Image 4</label>
                    <div class="form-group">
                       <input type="file" class="form-control" id="image4" name="image4">
                    </div>

                    <label style="text-align:left;width:100%;">Image 5</label>
                    <div class="form-group">
                       <input type="file" class="form-control" id="image5" name="image5">
                    </div>

                    <!--label style="text-align:left;width:100%;">Catégorie</label> 
                    <div class="form-group">
                        <select class="form-control" name="categorie">
                           <option value="Autres">Autres</option>
                           <option value="ChatGPT">ChatGPT</option>
                        </select>
                    </div-->
                    <input type="submit"  name="submit" value="Ajouter la publication" class="btn btn-primary pull-right" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection

@section('script')
    <script src="/js/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( 'textarea' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
@endsection