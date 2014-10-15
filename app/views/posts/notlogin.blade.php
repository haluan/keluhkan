@extends('layouts.master')

@if ($errors)
    <div class="alert">
        <ul class="list-unstyled">
            <li><div class="alert alert-danger" role="alert">Anda Harus Login terlebih dahulu</div></li>
        </ul>
    </div>
@endif