@extends('layouts.admin')
@section('content')
<p class="text-center text-xl font-bold my-2">Till dig som är ny på att använda systemet, <span class="text-red-600 rounded-full py-1 px-1">Tänk</span> på att flödet kan vara inte exakt som de här stegarna. Det beror på hur situationen är.</p>
<div class="min-h-screen min-w-screen bg-gray-100 flex items-start justify-center grid grid-cols-3 gap-4">
<div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6 h-44">
      <h3 class="font-serif font-bold text-gray-900 text-xl">Steg 1</h3>
      <img class="w-full rounded-md" src="/img/img3.png" alt="motivation" />
      <p class="text-center leading-relaxed">På<span class="font-bold"> produkt</span> sida ska företaget skapa vad har de för produkter genom att trycka på <span class="btn-green rounded-full py-1 px-1">Skapa Produkt</span> efter att du skapar så du har möjligheten att visa, ta bort och redigera.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.products.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">Besök sidan</a>
    </div>
  </div>

  <div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6">
      <h3 class="font-serif font-bold text-gray-800 text-xl">Steg 2</h3>
      <img class="w-full rounded-md" src="/img/img5.png" alt="motivation" />
      <p class="text-center leading-relaxed">På<span class="font-bold"> Produkt information</span> sida så du skapar vad produkten har för Serienummer och skriv lite beskrivning om den genom att trycka på <span class="btn-green rounded-full py-1 px-1">Skapa Produkt-info</span> efter detta trycker du förtsätt för att minska ett styke av denna produkten från lager, sen Klar.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.productinfos.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray"> Besök sidan</a>
    </div>
  </div>

  <div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6">
      <h3 class="font-serif font-bold text-gray-800 text-xl">Steg 3</h3>
      <img class="w-full rounded-md" src="/img/img4.png" alt="motivation" />
      <p class="text-center leading-relaxed">På<span class="font-bold"> lager</span> sidan så du skapar hur många produkter företaget har på lager genom att trycka på <span class="btn-green rounded-full py-1 px-1">Lägg till</span> Det går inte att ta bort. Du kan bara i fall du ta bort hela produkten från produkt sida.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.stocks.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">Besök sidan</a>
    </div>
  </div>

  <div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6">
      <h3 class="font-serif font-bold text-gray-800 text-xl">Steg 4</h3>
      <img class="w-full rounded-md" src="/img/img1.png" alt="motivation" />
      <p class="text-center leading-relaxed">På<span class="font-bold"> kunder</span> sid så du registerar nya kunder genom att trycka på <span class="btn-green rounded-full py-1 px-1">Skapa Kund</span> efter att du skapar så du har möjligheten att visa, ta bort och redigera.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.customers.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">Besök sidan</a>
    </div>
  </div>

  <div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6">
      <h3 class="font-serif font-bold text-gray-800 text-xl">Steg 5</h3>
      <img class="w-full rounded-md" src="/img/img2.png" alt="motivation" />
      <p class="text-center leading-relaxed">På<span class="font-bold"> Ärende</span> sida så du skapar ett ärende som till exemple vad kunden har köpt genom att trycka på <span class="btn-green rounded-full py-1 px-1">Skapa Ärende</span> efter att du skapar så du har möjligheten att visa, ta bort och redigera.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.projects.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">Besök sidan</a>
    </div>
  </div>

  <div>
    <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center my-6 mx-6">
      <h3 class="font-serif font-bold text-gray-800 text-xl">Steg 6</h3>
      <img class="w-full rounded-md" src="/img/img6.png" alt="motivation" />
      <p class="text-center leading-relaxed"><span class="font-bold">Transaktioner</span> sida visar vilka Transaktioner har hänt, när och vem.</p>
      <!-- <span class="text-center">By Matt Fraser</span> -->
      <a href="{{ route('admin.transactions.index') }}" class="flex items-center justify-between p-4 text-sm font-semibold text-gray-100 bg-gray-800 hover:bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-gray">Besök sidan</a>
    </div>
  </div>
</div>

@endsection