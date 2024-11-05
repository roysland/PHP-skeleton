@extends('layout.default')
@section('body')
<h1>Hello world</h1>
<label class="switch">
    <input type="checkbox" id="theme-toggle">
    <span>Enable live reload</span>
</label>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Index</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($table as $row)
        <tr>
            <td>{{ $row['name']}}</td>
            <td>{{ $row['planet'] }}</td>
            <td>{{ $row['date'] }}</td>
            <td>{{ $row['index'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


<style>
table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-top: 1rem;
    margin-bottom: 1rem;
}
table tbody td {
    padding: 0.5rem;
    border-bottom: 1px solid #c7c0b3;
    color: #c7c0b3;
    font-weight: 400;
}
table tbody tr:hover td {
    background-color: #c7c0b3;
    color: #252a33;
    cursor: pointer;
    
}

label.switch {
    position: relative;
    display: inline-flex;
    
}

label.switch input[type="checkbox"] {
    all: unset;
    display: block;
    width: 32px;
    height: 16px;
    padding: 0.25rem;
    background-color: #252a33;
    border: 1px solid #c7c0b3;
    position: relative;
}
label.switch input[type="checkbox"]:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #c7c0b3;
    border-radius: 2px;
    width: 50%;
    transition: left 0.3s;
}
label.switch input[type="checkbox"]:checked:after {
    left: 50%;
}
label.switch span {
    padding-left: 0.5rem;
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.3s;
}
</style>
@endsection