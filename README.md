# 🐳 Déploiement d'une Application Web Dockerisée dans un Cluster Minikube avec Monitoring Prometheus

## 📌 Objectif du Projet

Ce projet a pour objectif de démontrer la **containerisation d'une application web** (PHP + MySQL), suivie de son **déploiement dans un cluster Kubernetes local via Minikube**, avec **monitoring intégré via Prometheus**.  
L'environnement simule **trois nœuds**, répartissant les composants pour refléter une architecture distribuée.

---

## 🧱 Architecture

plaintext
Cluster Minikube (3 nœuds simulés via namespaces/labels)
├── Pod : Application Web (PHP)
├── Pod : MySQL
├── Pod : phpMyAdmin
├── Pod : Prometheus
└── Service : web (NodePort)

⚙️ Technologies Utilisées
Docker

Kubernetes (Minikube)

Prometheus

phpMyAdmin

MySQL

YAML pour les fichiers de déploiement

Visual Studio Code 


🚀 Lancer le Projet Localement
1. Démarrer Minikube

minikube start --nodes 3

2. Construire et pousser l’image de l’application web

docker build -t amoulette/montoring_dashboard-main-web .
docker push amoulette/montoring_dashboard-main-web


3. Appliquer les fichiers de déploiement

kubectl apply -f k8s/

4. Exposer l'application

minikube service web --url


5. Lancer Prometheus

kubectl port-forward svc/prometheus-service 9090:9090


📊 Monitoring avec Prometheus
Prometheus est configuré pour scraper les métriques de l’application web et du cluster.

Les métriques comme up, kube_pod_info, go_memstats_*, etc., permettent un suivi de l’état du système.

🧪 Tests & Validation
✅ Déploiement réussi sur Minikube avec affichage correct via NodePort

✅ Base de données accessible via phpMyAdmin

✅ Monitoring Prometheus fonctionnel

✅ Tests manuels sur le comportement des pods et la persistance MySQL

👩‍💻 Réalisé par
Amal Soltani
Étudiante en 2ᵉ année cycle ingénieur - Cloud Computing & Virtualisation



