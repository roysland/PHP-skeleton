@extends('layout.default')
@section('body')
<h1>Hello world</h1>
<?php
$table = [
    array("name" => "Mount Vespera",    "planet" => "Planet Thalassa",      "date" => "2157-03-14", "index" => 6),
    array("name" => "Kraxion",          "planet" => "Exo-Planet Zyra",      "date" => "2243-11-09", "index" => 7),
    array("name" => "Helion Peak",      "planet" => "Planet Elara",         "date" => "2180-05-18", "index" => 5),
    array("name" => "Pyrosphere",       "planet" => "Moon Xanthe",          "date" => "2291-06-15", "index" => 6),
    array("name" => "Vulcanus",         "planet" => "Asteroid B-612",       "date" => "2312-08-22", "index" => 5),
    array("name" => "Tarkon's Fury",    "planet" => "Planet Drakonis",      "date" => "2455-12-01", "index" => 8), 
    array("name" => "Aether Plume",     "planet" => "Planet Ganymede",      "date" => "2379-04-10", "index" => 4),
    array("name" => "Mount Zenith",     "planet" => "Planet Lumina",        "date" => "2392-09-21", "index" => 6),
    array("name" => "Inferno Crest",    "planet" => "Moon Rhea",            "date" => "2410-03-08", "index" => 5),
    array("name" => "Jacob's Hill",     "planet" => "Exoplanet HU5",        "date" => "2205-12-09", "index" => 7)
];
?>
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
    font-weight: 100;
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