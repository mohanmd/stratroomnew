import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { SubinitModalpopupPage } from './subinit-modalpopup.page';

describe('SubinitModalpopupPage', () => {
  let component: SubinitModalpopupPage;
  let fixture: ComponentFixture<SubinitModalpopupPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SubinitModalpopupPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(SubinitModalpopupPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
