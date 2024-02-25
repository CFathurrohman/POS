<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
    <script>
        function showUserForm() {
            document.getElementById("userForm").style.display = "block";
        }

        function submitUserForm() {
            var name = document.getElementById("nameInput").value;
            var id = document.getElementById("id").value;
            window.location.href = "{{ url('/user') }}/" + id + "/name/" + name;
        }
    </script>
</head>
<body>
    <h1>Home</h1>
    <ul>
        <li><a href="{{ url('/category') }}">Product</a></li>
        <li><a href="#" onclick="showUserForm()">User</a></li>
        <li><a href="{{ url('/sale') }}">Penjualan</a></li>
    </ul>

    <div id="userForm" style="display: none;">
        <h2>User Input</h2>
        <label for="id">User ID:</label>
        <input type="text" id="id" name="id" placeholder="User ID"><br><br>
        <label for="name">Name:</label>
        <input type="text" id="nameInput" placeholder="Name"><br><br>
        <button type="button" onclick="submitUserForm()">Submit</button>
    </div>
</body>
</html>
