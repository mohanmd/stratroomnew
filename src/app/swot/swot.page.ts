import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';
import { NgModule } from '@angular/core';

@Component({
  selector: 'app-swot',
  templateUrl: './swot.page.html',
  styleUrls: ['./swot.page.scss'],
})
export class SwotPage implements OnInit {

  constructor(private route: Router, private modalControler: ModalController) { }

  ngOnInit() {
  }

  selectTabs = 'swot';

  goDetail(){
    this.route.navigate(['swotdetail']);
  }
}
