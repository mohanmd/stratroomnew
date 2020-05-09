import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';

@Component({
  selector: 'app-budet-popup',
  templateUrl: './budet-popup.page.html',
  styleUrls: ['./budet-popup.page.scss'],
})
export class BudetPopupPage implements OnInit {
  @Input() budgetdata: string;
  constructor(private modalControler: ModalController) { }

  ngOnInit() {
  }

  dismiss() {
    // using the injected ModalController this page
    // can "dismiss" itself and optionally pass back data
    this.modalControler.dismiss({
      'dismissed': true
    });
  }

}
