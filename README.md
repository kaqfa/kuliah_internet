## Creating and running apps

- ```ionic start keuangan tabs``` [must have Internet connection]
- ```ionic serve```

## Setting Browser for Testing

- Pake firefox, klik Menu->Developer->Responsive Design View [Ctrl+Shift+M]

## Application Structure

- *index.html* halaman utama untuk include javascript Ionic dll
- *js/app.js* bagian untuk meregistrasikan beberapa modul / app
- *js/controller.js* bagian untuk menentukan template mana yang digunakan
    pada url tertentu dan juga aksi-aksi controlling
- *js/services.js* bagian untuk menghubungkan dengan data baik statis
    maupun dinamis
- *templates/* direktori untuk menyimpan semua komponen tampilan HTML

## Modifikasi tabs.html

- ion-tab
    - title : untuk mengubah label tulisan tab-nya
    - icon-off &amp; icon-on : untuk mengubah icon tab on dan off
    - href : untuk mengubah url pada saat tab di-klik
    - ion-nav-view name : untuk mengubah nama controllernya

```html
<ion-tabs class="tabs-icon-top tabs-color-active-positive">

  <!-- Statistic Tab -->
  <ion-tab title="Statistik" icon-off="ion-ios-pulse" icon-on="ion-ios-pulse-strong" href="#/tab/statistic">
    <ion-nav-view name="tab-statistic"></ion-nav-view>
  </ion-tab>

  <!-- Transactions Tab -->
  <ion-tab title="Transaksi" icon-off="ion-ios-paper-outline" icon-on="ion-ios-paper" href="#/tab/transactions">
    <ion-nav-view name="tab-transactions"></ion-nav-view>
  </ion-tab>

  <!-- Config Tab -->
  <ion-tab title="Konfigurasi" icon-off="ion-ios-gear-outline" icon-on="ion-ios-gear" href="#/tab/config">
    <ion-nav-view name="tab-config"></ion-nav-view>
  </ion-tab>

</ion-tabs>
```

- Setelah ini tabs tampil tapi halaman kosong

## Rename &amp; Hapus Template

- Untuk merapikan dan manajemen kode yang lebih baik, sebaiknya kita melakukan
    rename dan hapus beberapa file template sebagai berikut:

    - chat-detail.html ~> hapus
    - tab-account.html ~> tab-config.html
    - tab-chats.html ~> tab-transactions.html
    - tab-dash.html ~> tab-statistic.html

- Setelah ini tabs ilang juga

## Modifikasi app.js

- tiap bagian ganti nilai dari param#1 dari state,
    index dari views dan nilai dari url, templateUrl, dan controller
- dan juga yang bagian otherwise

```javascript
.state('tab.statistic', {
    url: '/statistic',
    views: {
      'tab-dash': {
        templateUrl: 'templates/tab-statistic.html',
        controller: 'StatCtrl'
      }
    }
})

.state('tab.transactions', {
  url: '/transactions',
  views: {
    'tab-chats': {
      templateUrl: 'templates/tab-transactions.html',
      controller: 'TransCtrl'
    }
  }
})

.state('tab.config', {
url: '/config',
views: {
  'tab-account': {
    templateUrl: 'templates/tab-config.html',
    controller: 'ConfCtrl'
  }
}
});

// if none of the above states are matched, use this as the fallback
$urlRouterProvider.otherwise('/tab/statistic');
```

## Modif controllers.js awal

- sesuaikan nama controller yang ada di app.js termasuk menghapus controller
    yang tidak diperlukan

```javascript
.controller('StatCtrl', function($scope) {})

.controller('TransCtrl', function($scope, Chats) {  
  $scope.chats = Chats.all();
  $scope.remove = function(chat) {
    Chats.remove(chat);
  };
})

.controller('ConfCtrl', function($scope) {
  $scope.settings = {
    enableFriends: true
  };
});
```

# Modifikasi List Transaksi

## Bikin Data List Transaksi JSON

- Saatnya melakukan modifikasi list transaksi dengan data static
- Pertama tambahkan data transaksi di dalam services.js

```javascript
angular.module('starter.services', [])
.factory('Transactions', function() {
    var trans = [{
        id: 1,
        title: 'Jajan Siang',
        desc: 'Jajan siang sendiri di pinggir jalan',
        amount: 15000,
        category: 1,
        trans_date: '2015-12-17T13:24:00'
    }, {
        id: 2,
        title: 'Makan Malam',
        desc: 'Makan malam yo masih sendiri di Warteg',
        amount: 12500,
        category: 1,
        trans_date: '2015-12-17T20:30:00'
    }, {
        id: 3,
        title: 'Uang Jajan',
        desc: 'Dapet uang jajan dari rumah',
        amount: 500000,
        category: 2,
        trans_date: '2015-12-20T09:12:15'
    }, {
        id: 4,
        title: 'Hasil Ngamen',
        desc: 'Dapet uang hasil ngamen di Univ',
        amount: 750000,
        category: 2,
        trans_date: '2015-12-25T15:34:00'
    }, {
        id: 5,
        title: 'Makan-Makan',
        desc: 'Makan-makan bareng temen-temen',
        amount: 250000,
        category: 1,
        trans_date: '2015-12-25T20:24:00'
    }, {
        id: 6,
        title: 'Ada yang Nyaur Utang',
        desc: 'Si Juki nyaur utang',
        amount: 55000,
        category: 2,
        trans_date: '2015-12-30T10:10:10'
    }];

    return {
    all: function() {
      return trans;
    },
    remove: function(tran) {
      trans.splice(trans.indexOf(tran), 1);
    },
    get: function(tranId) {
      for (var i = 0; i < trans.length; i++) {
        if (trans[i].id === parseInt(tranId)) {
          return trans[i];
        }
      }
      return null;
    }
  };
})

//..... another factory function ....
;
```

## Ubah Controller untuk Transaction

- sesuaikan dengan service yang telah dibuat

```javascript
.controller('TransCtrl', function($scope, Transactions) {
  $scope.trans = Transactions.all();
  $scope.remove = function(tran) {
    Transaction.remove(tran);
  };
})
```

## Ubah Template tab-transactions.html

- sesuaikan nama variabelnya
- currency pada data.amount untuk menampilkan dalam format mata uang
- date pada timedate untuk menampilkan dalam format tanggal

```html
<ion-view view-title="LIst Transaksi">
  <ion-content>
    <ion-list>
      <ion-item class="item-remove-animate item-avatar item-icon-left" ng-repeat="data in trans track by $index" type="item-text-wrap" href="">
        <!-- img ng-src="{{chat.face}}" -->
        <i ng-if="2 == data.category" class="icon ion-android-add-circle get-left"></i>
        <i ng-if="1 == data.category" class="icon ion-android-remove-circle get-left"></i>
        <h2>{{data.title}} <span>{{data.amount | currency:"Rp. "}}</span></h2>
        <p>{{data.desc}}</p>
        <i>{{data.trans_date | date:'dd-MMM-yyyy HH:mm'}}</i>

        <ion-option-button class="button-assertive" ng-click="remove(data)">Hapus</ion-option-button>
      </ion-item>
    </ion-list>
  </ion-content>
</ion-view>
```

# Modifikasi Halaman Statistik

## Modifikkasi controller

- modifikasi fungsi controller StatCtrl (termasuk parameternya)
    untuk mengikuti trend perhitungan statistik
- anggular.forEach digunakan untuk melakukan loop ke semua elemen array

```javascript
.controller('StatCtrl', function ($scope, Transactions) {
    $scope.allTrans = Transactions.all();
    balance = 0;
    countIn = countOut = 0;
    maxIn = maxOut = {amount:0};

    angular.forEach($scope.allTrans, function (data) {
        if (data.category == 1) {
            countOut += 1;
            balance -= parseInt(data.amount);
            if (parseInt(data.amount) > parseInt(maxOut.amount)) {
                maxOut = data;
            }
        }
        if (data.category == 2) {
            countIn += 1;
            balance += parseInt(data.amount);
            if (parseInt(data.amount) > parseInt(maxIn.amount)) {
                maxIn = data;
            }
        }
    });

    $scope.balance = balance;
    $scope.maxIn = maxIn;
    $scope.maxOut = maxOut;
    $scope.countIn = countIn;
    $scope.countOut = countOut;
})
```

## Modifikasi Template tab-statistic.html

- Modifikasi sesuai dengan keperluan

```
<ion-view view-title="Statistik">
  <ion-content>
    <div class="list card">
      <div class="item item-divider">Saldo Saat Ini</div>
      <div class="item item-body">
        <div>
          Saat ini anda memiliki saldo sebanyak <strong>{{balance|currency:"Rp."}}</strong>
        </div>
      </div>
    </div>
    <div class="list card">
      <div class="item item-divider">Transaksi Pemasukan</div>
      <div class="item item-body">
        <div>
          <ul>
              <li>Saat ini anda telah melakukan transaksi pemasukan sebanyak {{countIn}} kali</li>
              <li>Pemasukan terbesar terjadi pada <strong>{{maxIn.trans_date | date:'dd-MMM-yyyy HH:mm'}}</strong> pada transaksi <strong>{{maxIn.title}}</strong></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="list card">
      <div class="item item-divider">Transaksi Pengeluaran</div>
      <div class="item item-body">
        <div>
          <ul>
              <li>Saat ini anda telah melakukan transaksi pengeluaran sebanyak {{countOut}} kali</li>
              <li>Pengeluaran terbesar terjadi pada <strong>{{maxOut.trans_date | date:'dd-MMM-yyyy HH:mm'}}</strong> pada transaksi <strong>{{maxOut.title}}</strong></li>
          </ul>
        </div>
      </div>
    </div>

  </ion-content>
</ion-view>
```

# Modifikasi Configuration

## Modifikasi Template tab-config.html

- ubah sesuai dengan kebutuhan
- signProfile merupakan fungsi yang akan kita buat pada controller
    untuk melakukan aksi tertentu
- name setiap input pastikan ada ```formData``` atau variabel lain sebagai
    nama variabel di scope controller nanti

```
<ion-view view-title="Konfigurasi Pengguna">
    <ion-content>
        <form ng-submit="signProfile()">
            <div class="list">
                <label class="item item-input item-stacked-label">
                    <span class="input-label">Email</span>
                    <input type="text" value="" placeholder="Email" ng-model="formData.email">
                </label>
                <label class="item item-input item-stacked-label">
                    <span class="input-label">Username</span>
                    <input type="text" placeholder="Username" ng-model="formData.username">
                </label>
                <label class="item item-input item-stacked-label">
                    <span class="input-label">Nama Lengkap</span>
                    <input type="text" placeholder="Nama Lengkap" ng-model="formData.fullname">
                </label>
                <label class="item item-input item-select">
                    <span class="input-label">Gender</span>
                    <select ng-model="formData.gender">
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </label>
                <label class="item">
                    <button class="button button-block button-positive" type="button" ng-click="signProfile()">Simpan</button>
                </label>
            </div>
        </form>
    </ion-content>
</ion-view>
```

## Modifikasi Controller

- jika belum ada data di localStorage, berikan initial data (biar nggak error).
- load data dari localStorage dan parsing ke JSON.
- jika signProfile dijalankan, simpan ke dalam variabel kemudian dijadikan
  String JSON untuk disimpan pada localStorage
```
.controller('ConfCtrl', function ($scope) {
    if(localStorage.getItem('config') === null){
        localStorage.config = JSON.stringify({
          'email':'',
          'username':'',
          'fullname':'',
          'gender':'1'
        });
    }
    dbData = JSON.parse(localStorage.config);
    // init formData so that can be called from template
    $scope.dbData = dbData;
    $scope.formData = dbData;
    $scope.signProfile = function(){
        data = $scope.formData;
        dbData.email = data.email;
        dbData.username = data.username;
        dbData.fullname = data.fullname;
        dbData.gender = data.gender;
        localStorage.config = JSON.stringify(dbData);
    };
})
```

# Transaksi mengambil data dari database

## Ubah services.js

- modifikasi services.js untuk mengambil data secara dinamis dari localStorage
- tambahkan fungsi add untuk menambah data pada localStorage
- ubah fungsi remove untuk menghapus data dari localStorage

```
.factory('Transactions', function() {
  var trans = [];
  if (localStorage.getItem('transactions') !== null)
    trans = JSON.parse(localStorage.transactions);

  return {
    // ...
    add: function(tran) {
      trans.push(tran);
      localStorage.transactions = JSON.stringify(trans);
    },
    remove: function(tran) {
      trans.splice(trans.indexOf(tran), 1);
      localStorage.transactions = JSON.stringify(trans);
    },
    // ...
  };
})
```

## Tambah tombol di tab-transactions.html dan buat modal-form.html

- tambah tombol dulu
```
<ion-view view-title="List Transaksi">
  <ion-nav-buttons side="right">
  <button class="button button-positive" ng-click="formAdd()">
    <i class="icon ion-android-add-circle get-left"></i>
  </button>
  </ion-nav-buttons>
  // ...
</ion-view>
```
- kemudian bikin modalnya
```
<div class="modal">
    <ion-header-bar>
        <h1 class="title">Transaksi Baru</h1>
        <div class="buttons">
            <button class="button button-energized" ng-click="closeForm()">Tutup</button>
        </div>
    </ion-header-bar>
    <ion-content>
        <form ng-submit="addTrans()">
            <div class="list">
                <label class="item item-input">
                    <span class="input-label">Transaksi</span>
                    <input type="text" placeholder="Nama Transaksi" ng-model="formData.title">
                </label>
                <label class="item item-input item-select">
                    <span class="input-label">Kategori</span>
                    <select ng-model="formData.category">
                        <option value="1">Pengeluaran</option>
                        <option value="2">Pemasukan</option>
                    </select>
                </label>
                <label class="item item-input">
                    <span class="input-label">Jumlah</span>
                    <input type="text" placeholder="Jumlah Uang" ng-model="formData.amount">
                </label>
                <label class="item item-input">
                    <span class="input-label">Keterangan</span>
                    <textarea ng-model="formData.description"></textarea>
                </label>
                <label class="item">
                    <button class="button button-block button-positive"
                        type="button" ng-click="addTrans()">Tambah</button>
                </label>
            </div>
        </form>
    </ion-content>
</div>
```

## Ubah controller untuk Transaction

- tambahkan ```$ionicModal``` pada parameternya
- panggil &ionicModal menggunakan template yang telah dibuat
- bikin fungsi closeForm, formAdd, addTrans, dan remove
```
.controller('TransCtrl', function($scope, $ionicModal, Transactions) {
  $scope.trans = Transactions.all();

  $ionicModal.fromTemplateUrl('templates/modal-form.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
  });

  $scope.closeForm = function() {
    $scope.modal.hide();
  };
  $scope.formAdd = function() {
    $scope.modal.show();
  };

  $scope.formData = {};
  $scope.addTrans = function(){
    $scope.formData.trans_date = new Date();
    console.log($scope.formData);
    Transactions.add($scope.formData);
    $scope.formData = {};
    $scope.modal.hide();
  };

  $scope.remove = function(data){
    Transactions.remove(data);
  };
})
```
