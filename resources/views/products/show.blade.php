<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$products->name}}</title>
</head>
<body>
  
  <main>
    
    <article>
      <h1>{{$products->name}}</h1>
      <img src={{$products->imageURL}} alt="{{$products->name}}" width="200px"/>
      <p>{{$products->description}}
      </p>
      <p>{{$products->price}} EUR</p>
    </article>
    
  </main>
</body>
</html>