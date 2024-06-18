@extends('layouts.app')

@section('content')
<div class="dashboard">
  <h1>Dashboard</h1>
  <div class="stats">
    <div class="stat">
      <h3>40,689</h3>
      <p>Pending</p>
      <span>8.5% Up from yesterday</span>
    </div>
    <div class="stat">
      <h3>10,293</h3>
      <p>In Production</p>
      <span>1.3% Up from past week</span>
    </div>
    <div class="stat">
      <h3>89,000</h3>
      <p>On Hold</p>
      <span>4.3% Down from yesterday</span>
    </div>
    <div class="stat">
      <h3>2,040</h3>
      <p>Ready to Ship</p>
      <span>1.8% Up from yesterday</span>
    </div>
  </div>
  <div class="orders">
    <h2>List of Orders</h2>
    <table>
      <thead>
        <tr>
          <th>Order #</th>
          <th>Phase</th>
          <th>Team Member</th>
          <th>Date Started</th>
          <th>Time in Production</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00001</td>
          <td>Completed</td>
          <td>Jason Price</td>
          <td>12/09/2019</td>
          <td>20h05m</td>
        </tr>
        <tr>
          <td>00002</td>
          <td>On Hold</td>
          <td>Duane Dean</td>
          <td>12/09/2019</td>
          <td>2h05m</td>
        </tr>
        <tr>
          <td>00003</td>
          <td>Rejected</td>
          <td>Jonathan Barker</td>
          <td>12/09/2019</td>
          <td>2h05m</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="team-workstations">
    <div class="team">
      <h2>Team</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th># of Orders</th>
            <th>Time Spent</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jason Price</td>
            <td>5</td>
            <td>3h30m</td>
          </tr>
          <tr>
            <td>Duane Dean</td>
            <td>7</td>
            <td>5h07m</td>
          </tr>
          <tr>
            <td>Jonathan Barker</td>
            <td>4</td>
            <td>2h49m</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="workstations">
      <h2>Workstations</h2>
      <table>
        <thead>
          <tr>
            <th>Workstation #</th>
            <th># of Orders</th>
            <th>Time in Production</th>
            <th>Assigned To</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>5</td>
            <td>13h39m</td>
            <td>Jason Price</td>
          </tr>
          <tr>
            <td>2</td>
            <td>7</td>
            <td>20h27m</td>
            <td>Duane Dean</td>
          </tr>
          <tr>
            <td>3</td>
            <td>4</td>
            <td>11h15m</td>
            <td>Jonathan Barker</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection