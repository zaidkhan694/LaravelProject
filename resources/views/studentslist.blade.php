<div class="card mb-3">
    <img src="https://tj-web-prod.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2021/09/Student-Information-Management-System-_feature.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">SRNO</th>
                <th scope="col">First name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->srno }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>