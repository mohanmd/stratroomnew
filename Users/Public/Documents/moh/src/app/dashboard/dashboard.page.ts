import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.page.html',
  styleUrls: ['./dashboard.page.scss'],
})
export class DashboardPage implements OnInit {

  constructor(private route: Router) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }

  goInitiative(){
    this.route.navigate(['initiatives']);
  }
  goMeetings(){
    this.route.navigate(['meetings']);
  }
}
