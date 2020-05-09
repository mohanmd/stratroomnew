import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { BudetPopupPage } from './budet-popup.page';

describe('BudetPopupPage', () => {
  let component: BudetPopupPage;
  let fixture: ComponentFixture<BudetPopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BudetPopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(BudetPopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
