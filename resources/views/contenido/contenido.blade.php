@extends('principal')
@section('contenido')
        @if (Auth::check())
              
            @if (Auth::user()->idrol==1)
                <template v-if="menu==0">
                    <h1> Dashboard </h1>
                </template>
                <template v-if="menu==1">
                    <venta-primax-component></venta-primax-component>
                </template>   
                <template v-if="menu==2">
                <venta-pecsa-component></venta-pecsa-component>
                </template>   
                <template v-if="menu==3">
                    <venta-pro-component></venta-pro-component>
                </template>   
                <template v-if="menu==4">
                    <usuario-component></usuario-component>
                </template>   
                <template v-if="menu==5">
                    <rol-component></rol-component>
                </template>   
                <template v-if="menu==6">
                    <h1>Reporte Vendedor</h1>
                    
                </template>   
                <template v-if="menu==7">
                    <reporte-venta></reporte-venta>
                </template>   
                <template v-if="menu==8">
                    <cupon-component></cupon-component>
                    
                </template>
                <template v-if="menu==9">
                    <marca-component></marca-component>
                </template>
            @elseif(Auth::user()->idrol==2)
                <template v-if="menu==0">
                    <h1> Dashboard </h1>
                </template>
                <template v-if="menu==1">
                    <venta-primax-component></venta-primax-component>
                </template>   
                <template v-if="menu==2">
                <venta-pecsa-component></venta-pecsa-component>
                </template>   
                <template v-if="menu==3">
                    <venta-pro-component></venta-pro-component>
                </template>   
                <template v-if="menu==4">
                    <usuario-component></usuario-component>
                </template>   
                <template v-if="menu==5">
                    <h1> CONTENIDO 5 </h1>
                </template>   
                <template v-if="menu==6">
                    <h1> CONTENIDO 6 </h1>
                </template>   
                <template v-if="menu==7">
                    <h1> CONTENIDO 7 </h1>
                </template>   
                <template v-if="menu==8">
                    <reporte-venta></reporte-venta>
                </template>
            @else
            
        @endif
              
          @endif
       
@endsection