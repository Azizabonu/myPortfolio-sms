<div class="card mb-3">
  <img src="https://images.pexels.com/photos/2781814/pexels-photo-2781814.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    <table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">ONE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach[$students as $student]
    <tr>
      
      <td>{{ $student->one}}</td>
       <td>{{ $student->firstName}}</td>
        <td>{{ $student->secondName}}</td>
         <td>{{ $student->age}}</td>
          <td>{{ $student->Speciality}}</td>
      <td>
        
        <a href=" {{ url('/edi/' .$student->id)}} "  class="btn btn-sm btn-warning">Edit</a>
        
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>




