import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { InitModelpopupPage } from './init-modelpopup.page';

describe('InitModelpopupPage', () => {
  let component: InitModelpopupPage;
  let fixture: ComponentFixture<InitModelpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InitModelpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(InitModelpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
