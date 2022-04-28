<?php 
  $host = 'mysql';
  $user = 'root';
  $pass = 'dkfmadl';
  $conn = new mysqli($host, $user, $pass);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <style>
    .test {
      color: blue;
    }
    .mt-20 {
      margin-top: 20%;
    }
    table,tr,td,th {
      border: 1px solid black;
      border-collapse: collapse;
    }
    thead {
      background-color: #888;
    }
    .wid100 {
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <div id="main">
    <h2>Test Table</h2>

    <label>Options</label>
    <div>
      <label>이름 : 
      <input type="text" value="" v-model="search">
      </label>
    </div>
    
    <label>Table</label>
    <div>
      <table class="wid100">
        <thead>
          <tr>
            <th>이름</th>
            <th>나이</th>
            <th>연락처</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in filterItems" :key="item.name">
            <td>{{ item['name'] }}</td>
            <td>{{ item['old'] }}</td>
            <td>{{ item['phone'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="editor" :class="sectionDevide">
      <h2>{{ msg }}</h2>
    </div>
  </div>
  

  <script>
  // import { test } from "index.vue";
    var vue = new Vue({
      el: "#main",
      data: {
        msg: "hello, world !",
        items: [
          {
            name: 'hy',
            old: 2,
            phone: "010-7521-9120"
          }, 
          {
            name: 'chy',
            old: 31,
            phone: "010-1252-1535"
          }
        ],
        search: '',
        sectionDevide: "mt-20",
      },
      computed: {
        filterItems: function() {
            return this.items.filter(function(item) {
              console.log(item);
              console.log(item["name"].indexOf(this.search));
              var res = item["name"].indexOf(this.search) < 0
              return item["name"].indexOf(this.search) < 0;
            })
        }
      }
  });
  
  </script>
  <script>
    
  </script>
</body>
</html>
