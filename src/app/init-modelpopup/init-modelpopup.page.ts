import {Component, Input, OnInit} from '@angular/core';
import {ModalController} from '@ionic/angular';
import {Router} from '@angular/router';

@Component({
  selector: 'app-init-modelpopup',
  templateUrl: './init-modelpopup.page.html',
  styleUrls: ['./init-modelpopup.page.scss'],
})
export class InitModelpopupPage implements OnInit {
  @Input() iniativedata: string;
  public buttonTrue: boolean;

  constructor( private modalControler: ModalController, public router: Router)  {
    // console.log(data,'lathaa')

  }

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
