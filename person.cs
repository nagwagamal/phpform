using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Abm_project
{
    #region Person
    public class Person
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected int _age;
        #endregion
        #region Constructors
        public Person() { }
        public Person(string name, int age)
        {
            this._name=name;
            this._age=age;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual int Age
        {
            get {return _age;}
            set {_age=value;}
        }
        #endregion
    }
    #endregion
}