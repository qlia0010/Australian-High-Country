using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Australian_High_Country.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult News()
        {
            ViewBag.Message = "Your News page.";

            return View();
        }

        public ActionResult History()
        {
            ViewBag.Message = "Your News page.";

            return View();
        }

        public ActionResult Flora()
        {
            ViewBag.Message = "Your News page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your News page.";

            return View();
        }

        public ActionResult News1()
        {
            ViewBag.Message = "Your News page.";

            return View();
        }

        public ActionResult Explore()
        {
            ViewBag.Message = "Your Explore page.";

            return View();
        }

        public ActionResult Bushfire()
        {
            ViewBag.Message = "Your Bushfire page.";

            return View();
        }

        public ActionResult Prepare()
        {
            ViewBag.Message = "Your Prepare page.";

            return View();
        }

        public ActionResult Property()
        {
            ViewBag.Message = "Your Property page.";

            return View();
        }

        public ActionResult Vegetation()
        {
            ViewBag.Message = "Your Vegetation page.";

            return View();
        }

        public ActionResult Livestock()
        {
            ViewBag.Message = "Your Livestock page.";

            return View();
        }
        public ActionResult Family()
        {
            ViewBag.Message = "Your Family page.";

            return View();
        }

        public ActionResult Recovering()
        {
            ViewBag.Message = "Your Recovering page.";

            return View();
        }

        public ActionResult Responding()
        {
            ViewBag.Message = "Your Responding page.";

            return View();
        }


        public ActionResult VegetationHighcountry()
        {
            ViewBag.Message = "Your VegetationHighcountry page.";

            return View();
        }

        public ActionResult Land()
        {
            ViewBag.Message = "Your Land page.";

            return View();
        }
        public ActionResult Vegetationinland()
        {
            ViewBag.Message = "Your Land page.";

            return View();
        }

        public ActionResult Highcountry()
        {
            ViewBag.Message = "Your Land page.";

            return View();
        }

        public ActionResult Region()
        {
            ViewBag.Message = "Your Region page.";

            return View();
        }

        public ActionResult Disaster()
        {
            ViewBag.Message = "Your Disaster page.";

            return View();
        }
    }
}