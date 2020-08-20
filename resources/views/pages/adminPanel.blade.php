@extends('layouts.app')

@section('content')
    <div>
        <table class="adminpanel">
            <tr>
                <th class="bold">Page</th>
                <th class="bold" colspan="2">Action</th>
            </tr>
            <tr>
                <td>Proyectos</td>
                <td><a href="/projects/create">Add</a></td>
                <td><a href="/projects">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Eventos</td>
                <td><a href="/events/create">Add</a></td>
                <td><a href="/events">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Videos</td>
                <td><a href="/videos/create">Add</a></td>
                <td><a href="/videos">Update / Delete</a></td>
                
            </tr>
            <tr>
                <td>Equipos</td>
                <td><a href="/members/create">Add</a></td>
                <td><a href="/members">Update / Delete</a></td>
                
            </tr>
        </table>
    </div><br/><br/>
@endsection