<div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-4">
    <!-- Ümumi Qazanc -->
    <div class="bg-blue-600 text-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold opacity-80">Ümumi Qazanc</h3>
        <p class="text-3xl font-bold">{{ number_format((float)$totalRevenue, 2) }} AZN</p>
    </div>

    <!-- Sifariş Sayı -->
    <div class="bg-purple-600 text-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold opacity-80">Cəmi Sifariş</h3>
        <p class="text-3xl font-bold">{{ $orderCount }} ədəd</p>
    </div>

    <!-- Ortalama Hesab -->
    <div class="bg-green-600 text-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-semibold opacity-80">Ortalama Hesab</h3>
        <p class="text-3xl font-bold">{{ number_format((float)$averageOrder, 2) }} AZN</p>
    </div>
</div>
