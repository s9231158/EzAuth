<form  action="{{ route('employeeupdate', ['employeeid' => $employeeid->id]) }}" method="POST">
@csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $employeeid->name }}" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $employeeid->email }}" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ $employeeid->address }}"><br>

    <button type="submit">保存修改</button>
    <button type="button" onclick="window.history.back();">取消</button>
    @if(session('sussess'))
    <div class="alert alert-success">
        {{ session('sussess') }}
    </div>
    @endif

</form>