<form name="employee-form" id="employee-form" method="post" action="{{url('user/{id}')}}">

    @csrf

    <div class="form-group">
        <label for="name">Id</label>
        <input type="text" id="id" name="id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="position">Position</label>
        <input type="text" id="position" name="position" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="workData">workData</label>
        <textarea name="workData" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
