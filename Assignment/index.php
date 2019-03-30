<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Form pagination</title>
</head>

<body>
    <h2>Form Pagination</h2>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-insert">Insert</button>

    <table class="table" style="width: 100%;border:1px solid #eee;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">Profile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>aa</td>
      <td>bb</td>
      <td>cc</td>
      <td>dd</td>
      <td><button type="button" class="btn btn-Delete">Delete</button>
      <button type="button" class="btn btn-Edit">Edit</button></td>
      
    </tr>
     <tr>
      <th scope="row"></th>
      <td>aa</td>
      <td>bb</td>
      <td>cc</td>
      <td></td>
       <td><button type="button" class="btn btn-Delete">Delete</button>
       <button type="button" class="btn btn-Edit">Edit</button></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>aa</td>
      <td>bb</td>
      <td>cc</td>
      <td></td>
       <td><button type="button" class="btn btn-Delete">Delete</button>
       <button type="button" class="btn btn-Edit">Edit</button></td>
    </tr>
     <tr>
      <th scope="row"></th>
      <td>aa</td>
      <td>bb</td>
      <td>cc</td>
      <td></td>
       <td><button type="button" class="btn btn-Delete">Delete</button>
       <button type="button" class="btn btn-Edit">Edit</button></td>
    </tr>
  
    
  </tbody>
</table>



</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

</body>
</html>