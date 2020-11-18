<?php

class Client{
        private $id;
        private $nom;
        private $prenom;
        private $telephone;
        private $date_dernier_achat;
        private $portefeuille;
        private $ville;
        public function __construct()
        {
            
        }
        public function __toString()
        {
            return $this->nom.",".$this->prenom;
        }
        



        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of ville
         */ 
        public function getVille()
        {
                return $this->ville;
        }

        /**
         * Set the value of ville
         *
         * @return  self
         */ 
        public function setVille($ville)
        {
                $this->ville = $ville;

                return $this;
        }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Set the value of telephone
         *
         * @return  self
         */ 
        public function setTelephone($telephone)
        {
                $this->telephone = $telephone;

                return $this;
        }

        /**
         * Get the value of date_dernier_achat
         */ 
        public function getDate_dernier_achat()
        {
                return $this->date_dernier_achat;
        }

        /**
         * Set the value of date_dernier_achat
         *
         * @return  self
         */ 
        public function setDate_dernier_achat($date_dernier_achat)
        {
                $this->date_dernier_achat = $date_dernier_achat;

                return $this;
        }

        /**
         * Get the value of portefeuille
         */ 
        public function getPortefeuille()
        {
                return $this->portefeuille;
        }

        /**
         * Set the value of portefeuille
         *
         * @return  self
         */ 
        public function setPortefeuille($portefeuille)
        {
                $this->portefeuille = $portefeuille;

                return $this;
        }
}


?>