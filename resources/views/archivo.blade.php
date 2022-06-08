<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Texto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <div class="container">

      <h1> Titulo </h1>

      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum enim, dapibus iaculis purus et, convallis aliquet dui. Pellentesque mattis ultrices lectus vel posuere. Fusce convallis orci et vestibulum bibendum. Morbi laoreet porta condimentum. Phasellus interdum vitae magna in pretium. Morbi quis tristique elit, eu suscipit ipsum. Nullam lacinia diam non odio aliquam, vitae imperdiet sapien lacinia. Curabitur quis orci fringilla felis viverra blandit eu sit amet arcu. Praesent vehicula a ipsum in consectetur. Vestibulum quis convallis est, vitae feugiat lacus. Curabitur mollis ante sed justo tincidunt, at rhoncus velit convallis. Nunc tempus nec magna sed scelerisque. Duis id feugiat urna, dictum eleifend est. Nulla facilisi. Nulla facilisi. </p>
      <p>Aliquam erat orci, tempus id vulputate commodo, fermentum ac lorem. Donec ullamcorper consequat diam, eget suscipit nisl iaculis vitae. In hac habitasse platea dictumst. Phasellus tincidunt congue tellus, egestas facilisis ligula scelerisque sit amet. Aliquam a ornare ante. Etiam neque enim, feugiat non nulla ac, molestie ornare risus. Suspendisse magna velit, interdum eu eros blandit, viverra molestie tortor. Aliquam fermentum sagittis massa, eget elementum velit sodales sed. </p>
      <p>Duis posuere congue diam, eget congue nisl porta eget. Duis tempor mi sem, sit amet suscipit nunc pellentesque commodo. Aliquam a lacus tristique, vulputate erat nec, varius diam. Nam sed tincidunt orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam accumsan vulputate lacus, sed facilisis massa. Suspendisse sit amet est id lectus tristique posuere nec at orci. Donec pharetra erat non tortor maximus accumsan. Quisque at ultricies arcu. Donec tristique lacus quis tincidunt vulputate. </p>
      <p>Vivamus elit magna, scelerisque non eros id, hendrerit cursus neque. Vivamus ipsum felis, finibus at pellentesque vel, volutpat eu lorem. Fusce consectetur orci quis lectus laoreet, eget rutrum odio ultrices. Mauris tempor tristique ultricies. Aliquam nec sodales justo. Morbi euismod maximus dolor ac lobortis. Nunc sit amet nisl non tortor suscipit pharetra at sit amet lacus. Ut blandit laoreet malesuada. Donec vitae malesuada eros, et imperdiet eros. Vestibulum id ornare lectus, non cursus dolor. Nunc dignissim vitae tellus sed pretium. In hac habitasse platea dictumst. Vivamus vitae ornare massa. Quisque a nisl dignissim, porta mauris ut, aliquet velit. </p>
      <p>Duis et dolor at diam aliquam hendrerit id ut metus. Mauris hendrerit lectus sed semper aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin aliquet, nunc in interdum ullamcorper, quam velit pretium orci, ac viverra ex mi quis quam. Ut ultrices magna sit amet elementum condimentum. Etiam ut pretium enim, vitae tempus urna. Donec hendrerit mollis lectus vitae blandit. Nunc faucibus nec elit a laoreet. Nam pellentesque lobortis nisl vitae vehicula. Mauris luctus tristique lectus, eget dignissim nunc sollicitudin sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed gravida sit amet nisl quis dignissim. Nunc finibus maximus lacus non lobortis. Pellentesque mattis sem libero, in commodo ipsum lobortis vel. </p>
    </div>
    
    <hr></hr>

    <div class="container">
    <form action="/api/comentarios" method="POST">
    <p>Dejar un comentario</p>

      <label for="contenido">Comentario</label>
      <input type="text" name="contenido" placeholder="Comentario" class="form-control" required><br>
      <label for="autor">Nombre</label>
      <input type="text" name="autor" class="form-control" placeholder="Nombre"  required><br>
      <input type="hidden" name="web">
      <input type="submit" class="btn btn-primary" value="Registar">
    </form>  
    </div>

    <hr></hr>
    <div class="container">

<ul class="list-group">

      @foreach($comentarios as $com)
        <article>
        <li class="list-group-item">
            <h3 class="titulo-com">{{ $com->autor }}</h3>
            <p class="contenido-com">{{ $com->contenido }}</p>
            
            <a href="/texto/{{ $com->id }}"  class="btn btn-warning">Borrar Comentario</a>
            </li>
        </article>
      @endforeach
    </div>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
