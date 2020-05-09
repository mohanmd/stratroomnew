import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-initiative-detail',
  templateUrl: './initiative-detail.page.html',
  styleUrls: ['./initiative-detail.page.scss'],
})
export class InitiativeDetailPage implements OnInit {

  selectTabs = 'budget';
  constructor(private route: Router) { }

  ngOnInit() {
  }

  goLogin(){
    this.route.navigate(['login']);
  }
  goBudget(){
    this.route.navigate(['initiative-budget']);
  }
}
